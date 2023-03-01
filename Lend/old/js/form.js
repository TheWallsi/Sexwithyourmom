function hide() {
  var elem = document.getElementById('country');
  var elem2 = document.getElementById('country2');
  var elem3 = document.getElementById('country3');

  elem.style.display = 'none';
  elem2.style.display = 'none';
  elem3.style.display = 'none';
}

hide();

let prefix = () => {
  let dropdown = "country" + jQuery_3_5_1("#country :selected").val();
  let valueName = eval(dropdown);
  jQuery_3_5_1("#phone").val(valueName.prefix);

  let dropdown2 = "country" + jQuery_3_5_1("#country :selected").val();
  let valueName2 = eval(dropdown2);
  jQuery_3_5_1("#phone2").val(valueName2.prefix);

  let dropdown3 = "country" + jQuery_3_5_1("#country :selected").val();
  let valueName3 = eval(dropdown3);
  jQuery_3_5_1("#phone3").val(valueName3.prefix);
}

jQuery_3_5_1('#country').change(function () {
  prefix();
})

jQuery_3_5_1('#country2').change(function () {
  prefix();
})

jQuery_3_5_1('#country3').change(function () {
  prefix();
})

jQuery_3_5_1.get("https://freegeoip.app/json/", function (response) {
  jQuery_3_5_1(`#country option[value=${response.country_code}]`).attr('selected', 'selected');
  prefix();
}, "jsonp");


function preventNumberInput(e) {
  let keyCode = (e.keyCode ? e.keyCode : e.which);
  if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107) {
    e.preventDefault();
  }
}

jQuery_3_5_1(document).ready(function () {
  jQuery_3_5_1('#text_field').keypress(function (e) {
    preventNumberInput(e);
  });
})


var countryPL = {
  name: "Polska",
  prefix: "+48",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryAL = {
  name: "Albania",
  prefix: "+355",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryAD = {
  name: "Andora",
  prefix: "+376",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryAT = {
  name: "Austria",
  prefix: "+43",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{13})"
};
var countryBE = {
  name: "Belgia",
  prefix: "+32",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryBY = {
  name: "Białoruś",
  prefix: "+375",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryBA = {
  name: "Bośnia i Hercegowina",
  prefix: "+387",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryBG = {
  name: "Bułgaria",
  prefix: "+359",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{8})"
};
var countryHR = {
  name: "Chorwacja",
  prefix: "+385",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryME = {
  name: "Czarnogóra",
  prefix: "+382",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{12})"
};
var countryCZ = {
  name: "Republika Czeska",
  prefix: "+420",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryDK = {
  name: "Dania",
  prefix: "+45",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{8})"
};
var countryEE = {
  name: "Estonia",
  prefix: "+372",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{8})"
};
var countryFI = {
  name: "Finlandia",
  prefix: "+358",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{10})"
};
var countryFR = {
  name: "Francja",
  prefix: "+33",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryGR = {
  name: "Grecja",
  prefix: "+30",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{10})"
};
var countryES = {
  name: "Hiszpania",
  prefix: "+34",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryNL = {
  name: "Holandia",
  prefix: "+31",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{10})"
};
var countryIE = {
  name: "Irlandia",
  prefix: "+353",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{10})"
};
var countryIS = {
  name: "Islandia",
  prefix: "+354",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{7})"
};
var countryCA = {
  name: "Kanada",
  prefix: "+1",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryKZ = {
  name: "Kazachstan",
  prefix: "+7",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryLI = {
  name: "Liechtenstein",
  prefix: "+423",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{7,9})"
};
var countryLT = {
  name: "Litwa",
  prefix: "+370",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryLU = {
  name: "Luksemburg",
  prefix: "+352",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryLV = {
  name: "Łotwa",
  prefix: "+371",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryMK = {
  name: "Macedonia",
  prefix: "+389",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryMT = {
  name: "Malta",
  prefix: "+356",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryMD = {
  name: "Mołdawia",
  prefix: "+373",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryMC = {
  name: "Monako",
  prefix: "+377",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryDE = {
  name: "Niemcy",
  prefix: "+49",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryPT = {
  name: "Portugalia",
  prefix: "+351",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryRU = {
  name: "Rosja",
  prefix: "+7",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryRO = {
  name: "Rumunia",
  prefix: "+40",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countrySM = {
  name: "San Marino",
  prefix: "+378",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryXS = {
  name: "Serbia",
  prefix: "+381",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countrySK = {
  name: "Słowacja",
  prefix: "+421",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countrySI = {
  name: "Słowenia",
  prefix: "+386",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryUS = {
  name: "Stany Zjedn. Ameryki",
  prefix: "+1",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryUS = {
  name: "Białoruś",
  prefix: "+48",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryCH = {
  name: "Szwajcaria",
  prefix: "+41",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countrySE = {
  name: "Szwecja",
  prefix: "+46",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryTR = {
  name: "Turcja",
  prefix: "+90",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryUA = {
  name: "Ukraina",
  prefix: "+380",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryVA = {
  name: "Watykan",
  prefix: "+39",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryHU = {
  name: "Węgry",
  prefix: "+36",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryGB = {
  name: "Wielka Brytania",
  prefix: "+44",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryIT = {
  name: "Włochy",
  prefix: "+39",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryNO = {
  name: "Norwegia",
  prefix: "+47",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};
var countryCY = {
  name: "Cypr",
  prefix: "+357",
  // pattern: "(((\+[0-9]{1,3})|0)?[0-9]{9})"
};

