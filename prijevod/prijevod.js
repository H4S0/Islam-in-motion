function loadTranslationData(language, callback) {
  var xhr = new XMLHttpRequest();
  xhr.overrideMimeType("application/json");
  xhr.open("GET", language + ".json", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var translationData = JSON.parse(xhr.responseText);
      callback(translationData);
    }
  };
  xhr.send(null);
}

function translate(targetLanguage) {
  var translationFile;

  if (targetLanguage === "bs") {
    translationFile = "bs.json";
  } else if (targetLanguage === "en") {
    translationFile = "en.json";
  }

  loadTranslationData(translationFile, function (translationData) {
    var elementsToTranslate = document.querySelectorAll('[data-translate]');
    for (var i = 0; i < elementsToTranslate.length; i++) {
      var element = elementsToTranslate[i];
      var translationKey = element.dataset.translate;
      var translatedText = translationData[translationKey];
      if (translatedText) {
        element.textContent = translatedText;
      }
    }
  });
}
