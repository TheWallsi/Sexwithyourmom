function hide() {
  var elem = document.getElementById("country");

  elem.style.display = "none";
  var elem2 = document.getElementById("country2");

  elem2.style.display = "none";
}

hide();

let prefix = () => {
  let dropdown = "country" + jQuery_3_5_1("#country :selected").val();
  let valueName = eval(dropdown);
  jQuery_3_5_1("#phone").val(valueName.prefix);
  let dropdown2 = "country" + jQuery_3_5_1("#country2 :selected").val();
  let valueName2 = eval(dropdown2);
  jQuery_3_5_1("#phone2").val(valueName2.prefix);
};

jQuery_3_5_1("#country").change(function () {
  prefix();
});
jQuery_3_5_1("#country2").change(function () {
  prefix();
});

var countryCode = "pl";
jQuery_3_5_1(`#country option[value=${countryCode}]`).attr(
    "selected",
    "selected"
);
jQuery_3_5_1(`#country2 option[value=${countryCode}]`).attr(
    "selected",
    "selected"
);
setTimeout(() => {
  prefix();
}, 100);

function preventNumberInput(e) {
  let keyCode = e.keyCode ? e.keyCode : e.which;
  if ((keyCode > 47 && keyCode < 58) || (keyCode > 95 && keyCode < 107)) {
    e.preventDefault();
  }
}

jQuery_3_5_1(document).ready(function () {
  jQuery_3_5_1("#text_field").keypress(function (e) {
    preventNumberInput(e);
  });
});

var countrypl = {
  name: "Polska",
  prefix: "+48",
  pattern: "(((+[0-9]{2})|0)?[0-9]{9})",
};
