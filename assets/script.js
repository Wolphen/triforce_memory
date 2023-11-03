//Create and display the gameboard while clicking on play
var alreadyCreated = false;
var flipedCard = 0;
var pairFind = 0;
var timerNumber = 0;

function tableRoyalEasy() {
  let div = document.getElementById("gameBoard");
  let divRoyal4 = document.createElement("div");
  let pauseMenu = document.createElement("h1");
  let tableRoyal = document.createElement("table");
  let timerText = document.createElement("h1");
  let difficulty = document.getElementById("difficulty").value;
  let theme = document.getElementById("theme").value;
  let idGiver = 1;

  pauseMenu.textContent = "Pause";
  pauseMenu.className = "menu_pause";
  timerText.className = "menu_game";
  timerText.id = "timer";

  if (difficulty == "facile" && theme == "royal") {
    if (alreadyCreated) {
      document.getElementById("gameBoard").innerHTML = "";
    }
    divRoyal4.className = "royal_board1";
    tableRoyal.className = "board4";
    for (let i = 0; i < 4; i++) {
      let row = document.createElement("tr");
      for (let j = 0; j < 4; j++) {
        let cell = document.createElement("td");
        let cellImage = document.createElement("img");

        cellImage.src = "assets/img/theme_royal/royal.png";
        cellImage.className = "card_img4";
        cellImage.id = idGiver;
        cellImage.addEventListener("click", () => {
          retourner(cellImage);
        });
        cell.appendChild(cellImage);
        row.appendChild(cell);
        idGiver++;
      }
      tableRoyal.appendChild(row);
    }

    let numbers = [];
    for (let i = 1; i <= 8; i++) {
      numbers.push(i);
      numbers.push(i);
    }
    shuffleCard(numbers);

    let index = 0;
    for (let i = 0; i < 4; i++) {
      let row = tableRoyal.rows[i];
      for (let j = 0; j < 4; j++) {
        cell = row.cells[j];
        cellImage = cell.firstChild;
        cellImage.setAttribute("name", numbers[index]);
        index++;
      }
    }
    divRoyal4.appendChild(pauseMenu);
    divRoyal4.appendChild(tableRoyal);
    divRoyal4.appendChild(timerText);
    div.appendChild(divRoyal4);
    chronoStart();
    alreadyCreated = true;
  }
}

function shuffleCard(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

var imgName1;
var imgName2;

var imgId1;
var imgId2;

function retourner(img) {
  if (flipedCard == 0) {
    imgName1 = img.name;
    imgId1 = img.id;
    img.src = "assets/img/theme_royal/royal" + imgName1 + ".jpg";
    flipedCard++;
  } else {
    imgName2 = img.name;
    imgId2 = img.id;
    img.src = "assets/img/theme_royal/royal" + imgName2 + ".jpg";
    if (imgName1 != imgName2) {
      reflipImg1 = document.getElementById(imgId1);
      reflipImg2 = document.getElementById(imgId2);

      setTimeout(function () {
        reflipImg1.src = "assets/img/theme_royal/royal.png";
        reflipImg2.src = "assets/img/theme_royal/royal.png";
      }, 500);
    } else {
      pairFind++;
      checkVictory(pairFind);
    }
    flipedCard = 0;
  }
}

function checkVictory(pairFind) {
  if (pairFind == 1) {
     alert(
       "Vous avez gagné. \n Votre temps est:" +
        document.getElementById("timer").textContent
     );
    var xhtml = new XMLHttpRequest();
    xhtml.open("post", "/triforce_memory/utils/requestScoreJs.php", true);
    xhtml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhtml.onreadystatechange = (e) => {
      console.log("réussi");
    };
    xhtml.send("temps=" + timerNumber + "&jeu=" + document.getElementById("difficulty").value + "&userID="+ $_SESSION['userId'] );
     //window.location.reload();
  }
}

function chronoStart() {
  var chrono = document.getElementById("timer");

  let heure = 0;
  let minute = 0;
  let seconde = 0;
  let ms = 0;
  const demarrer = () => {
    defilertemps();
  };
  const defilertemps = () => {
    seconde = parseInt(seconde);
    minute = parseInt(minute);
    heure = parseInt(heure);
    ms = parseInt(ms);
    ms += 10;
    if (ms == 1000) {
      ms = 0;
      seconde++;
      if (seconde == 60) {
        seconde = 0;
        minute++;
        if (minute == 60) {
          minute = 0;
          heure++;
        }
      }
    }
    timerNumber = seconde+ (minute*60);
    if (heure < 10) {
      heure = "0" + heure;
    }
    if (minute < 10) {
      minute = "0" + minute;
    }
    if (seconde < 10) {
      seconde = "0" + seconde;
    }
    chrono.innerHTML = heure + ":" + minute + ":" + seconde + ":" + ms;
    timeout = setTimeout(defilertemps, 10);
    // console.log(ms);
  };
  document.getElementById("timerStart").addEventListener("click", demarrer());
}
