let dealerSum = 0;
let yourSum = 0;
// Menyimpan jumlah nilai kartu

let dealerAceCount = 0;
let yourAceCount = 0; 
// Menyimpan jumlah kartu AS

let hidden; // Menyembunyikan kartu dealer
let deck; // Menyimpan tumpukan kartu

let canHit = true; 
let yourMoney = 5000;
let betAmount = 0;

window.onload = function() {
    buildDeck();
    shuffleDeck();
    
    document.getElementById("bet").addEventListener("click", placeBet);
    document.getElementById("play-again").addEventListener("click", resetGame);
}

// Membuat tumpukan kartu
function buildDeck() {
    let values = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
    let types = ["C", "D", "H", "S"];
    deck = [];

    for (let i = 0; i < types.length; i++) {
        for (let j = 0; j < values.length; j++) {
            deck.push(values[j] + "-" + types[i]);
        }
    }
}

// Mengacak posisi kartu
function shuffleDeck() {
    for (let i = 0; i < deck.length; i++) {
        let j = Math.floor(Math.random() * deck.length);
        let temp = deck[i];
        deck[i] = deck[j];
        deck[j] = temp;
    }
}

// Menginput jumlah taruhan
function placeBet() {
    betAmount = parseInt(document.getElementById("bet-amount").value);
    if (betAmount >= 100 && betAmount <= yourMoney) {
        yourMoney -= betAmount;
        document.getElementById("your-money").innerText = `$${yourMoney}`;
        startGame();
    } else {
        alert("Please enter a valid bet amount (min $100, max your money).");
    }
}

// Permainan
function startGame() {
    document.getElementById("hit").disabled = false;
    document.getElementById("stay").disabled = false;
    document.getElementById("bet").disabled = true;

    // Reset seluruh nilai kartu dan jumlah kartu AS
    dealerSum = 0;
    yourSum = 0;
    dealerAceCount = 0;
    yourAceCount = 0;
    canHit = true;

    document.getElementById("dealer-cards").innerHTML = '<img id="hidden" src="./cards/BACK.png">';
    document.getElementById("your-cards").innerHTML = "";
    document.getElementById("results").innerText = "";
    document.getElementById("dealer-sum").innerText = "??";
    document.getElementById("your-sum").innerText = yourSum;

    hidden = deck.pop();
    dealerSum += getValue(hidden);
    dealerAceCount += checkAce(hidden);

    let card = deck.pop();
    let cardImg = document.createElement("img");
    cardImg.src = "./cards/" + card + ".png";
    dealerSum += getValue(card);
    dealerAceCount += checkAce(card);
    document.getElementById("dealer-cards").append(cardImg);

    for (let i = 0; i < 2; i++) {
        let cardImg = document.createElement("img");
        let card = deck.pop();
        cardImg.src = "./cards/" + card + ".png";
        yourSum += getValue(card);
        yourAceCount += checkAce(card);
        document.getElementById("your-cards").append(cardImg);
    }

    document.getElementById("your-sum").innerText = yourSum;

    document.getElementById("hit").addEventListener("click", hit);
    document.getElementById("stay").addEventListener("click", stay);
}

// Melakukan HIT sesuai aturan permainan
function hit() {
    if (!canHit) return;

    let cardImg = document.createElement("img");
    let card = deck.pop();
    cardImg.src = "./cards/" + card + ".png";
    yourSum += getValue(card);
    yourAceCount += checkAce(card);
    document.getElementById("your-cards").append(cardImg);

    document.getElementById("your-sum").innerText = reduceAce(yourSum, yourAceCount);

    if (reduceAce(yourSum, yourAceCount) > 21) {
        canHit = false;
        endGame("You Lose!");
    }
}

// Melakukan stay
function stay() {
    canHit = false;

    // Menampilkan kartu yang disembunyikan
    document.getElementById("hidden").src = "./cards/" + hidden + ".png";

    // Dealer harus hit hingga total keseluruhan/sum 17
    while (dealerSum < 17) {
        let cardImg = document.createElement("img");
        let card = deck.pop();
        cardImg.src = "./cards/" + card + ".png";
        dealerSum += getValue(card);
        dealerAceCount += checkAce(card);
        document.getElementById("dealer-cards").append(cardImg);
    }

    dealerSum = reduceAce(dealerSum, dealerAceCount);
    yourSum = reduceAce(yourSum, yourAceCount);

    document.getElementById("dealer-sum").innerText = dealerSum;

    if (yourSum > 21) {
        endGame("You Lose!");
    } else if (dealerSum > 21) {
        endGame("You Win!");
    } else if (yourSum > dealerSum) {
        endGame("You Win!");
    } else if (dealerSum > yourSum) {
        endGame("You Lose!");
    } else {
        endGame("Tie!");
    }
}

function endGame(result) {
    document.getElementById("results").innerText = result;
    document.getElementById("hit").disabled = true;
    document.getElementById("stay").disabled = true;
    document.getElementById("play-again").style.display = "inline";

    if (result === "You Win!") {
        yourMoney += betAmount * 2;
        document.getElementById("your-money").innerText = `$${yourMoney}`;
    }

    if (yourMoney <= 0) {
        document.getElementById("results").innerText = "Game Over! No more money.";
        document.getElementById("play-again").style.display = "none";
    }
}

function resetGame() {
    document.getElementById("hit").disabled = true;
    document.getElementById("stay").disabled = true;
    document.getElementById("bet").disabled = false;
    document.getElementById("play-again").style.display = "none";

    buildDeck();
    shuffleDeck();
}

function getValue(card) {
    let data = card.split("-");
    let value = data[0];

    if (isNaN(value)) {
        if (value === "A") {
            return 11;
        }
        return 10;
    }
    return parseInt(value);
}

function checkAce(card) {
    if (card[0] === "A") {
        return 1;
    }
    return 0;
}

function reduceAce(playerSum, playerAceCount) {
    while (playerSum > 21 && playerAceCount > 0) {
        playerSum -= 10;
        playerAceCount -= 1;
    }
    return playerSum;
}
