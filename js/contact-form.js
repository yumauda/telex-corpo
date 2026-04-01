jQuery(function ($) {
  const $root = $(".p-contact");
  if (!$root.length) return;

  const thanksUrl =
    window.TELEX_CONTACT && typeof window.TELEX_CONTACT.thanksUrl === "string"
      ? window.TELEX_CONTACT.thanksUrl
      : "";

  const $form = $root.find(".wpcf7 form").first();
  if (!$form.length) return;

  const $multi = $form.find(".js-contactForm").first();
  const $inputArea = $multi.find(".js-contactInput");
  const $confirmArea = $multi.find(".js-contactConfirmArea");
  const $confirmBtn = $multi.find(".js-contactConfirm");
  const $backBtn = $multi.find(".js-contactBack");
  const $submitBtn = $form.find('input[type="submit"]');

  const setConfirmDisabled = () => {
    if (!$confirmBtn.length) return;

    const requiredText = $form.find('[aria-required="true"]').filter(function () {
      const $el = $(this);
      const type = ($el.attr("type") || "").toLowerCase();
      if (type === "radio" || type === "checkbox") return false;
      return true;
    });

    let ok = true;
    requiredText.each(function () {
      const val = String($(this).val() || "").trim();
      if (!val) ok = false;
    });

    const requiredRadioNames = [];
    $form
      .find('input[type="radio"][aria-required="true"]')
      .each(function () {
        const name = $(this).attr("name");
        if (name && !requiredRadioNames.includes(name)) requiredRadioNames.push(name);
      });
    requiredRadioNames.forEach(function (name) {
      if (!$form.find(`input[type="radio"][name="${name}"]:checked`).length) ok = false;
    });

    const $accept = $form.find('input[type="checkbox"][name="privacy-consent"], input[type="checkbox"][name="privacy-consent[]"]');
    if ($accept.length && !$accept.is(":checked")) ok = false;

    $confirmBtn.prop("disabled", !ok);
    $submitBtn.prop("disabled", !ok);
  };

  const getRadioValue = (name) => {
    const $checked = $form.find(`input[type="radio"][name="${name}"]:checked`).first();
    return $checked.length ? String($checked.val() || "") : "";
  };

  const setText = (selector, value) => {
    const $el = $multi.find(selector);
    if (!$el.length) return;
    $el.text(value || "");
  };

  const renderConfirm = () => {
    setText(".js-confirm-company", String($form.find("#cf-company").val() || "").trim());
    setText(".js-confirm-name", String($form.find("#cf-name").val() || "").trim());
    setText(".js-confirm-tel", String($form.find("#cf-tel").val() || "").trim());
    setText(".js-confirm-email", String($form.find("#cf-email").val() || "").trim());
    setText(".js-confirm-type", getRadioValue("inquiry-type"));
    setText(".js-confirm-message", String($form.find("#cf-message").val() || "").trim());
  };

  const openConfirm = () => {
    if (!$multi.length) return;
    renderConfirm();
    $multi.addClass("is-confirm");
    $inputArea.attr("aria-hidden", "true");
    $confirmArea.attr("aria-hidden", "false");
    $multi.get(0).scrollIntoView({ behavior: "smooth", block: "start" });
  };

  const closeConfirm = () => {
    if (!$multi.length) return;
    $multi.removeClass("is-confirm");
    $inputArea.attr("aria-hidden", "false");
    $confirmArea.attr("aria-hidden", "true");
    $multi.get(0).scrollIntoView({ behavior: "smooth", block: "start" });
  };

  $form.on("input change", 'input, textarea, select', function () {
    setConfirmDisabled();
    if ($multi.hasClass("is-confirm")) renderConfirm();
  });

  $confirmBtn.on("click", function (e) {
    e.preventDefault();
    setConfirmDisabled();
    if ($confirmBtn.prop("disabled")) return;
    openConfirm();
  });

  $backBtn.on("click", function (e) {
    e.preventDefault();
    closeConfirm();
  });

  document.addEventListener(
    "wpcf7invalid",
    function () {
      closeConfirm();
    },
    false
  );

  document.addEventListener(
    "wpcf7spam",
    function () {
      closeConfirm();
    },
    false
  );

  document.addEventListener(
    "wpcf7mailfailed",
    function () {
      closeConfirm();
    },
    false
  );

  document.addEventListener(
    "wpcf7mailsent",
    function () {
      if (thanksUrl) window.location.href = thanksUrl;
    },
    false
  );

  setConfirmDisabled();
});

