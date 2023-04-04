function hesapla() {
    var krediTutar = document.getElementById("krediTutar").value;
    var vade = document.getElementById("vade").value;
    var faizOrani = document.getElementById("faizOrani").value / 100 / 12;
  
    var aylikTaksit = (krediTutar * faizOrani * Math.pow(1 + faizOrani, vade)) / (Math.pow(1 + faizOrani, vade) - 1);
    aylikTaksit = aylikTaksit.toFixed(2);
  
    document.getElementById("aylikTaksit").value = aylikTaksit;
  }
  