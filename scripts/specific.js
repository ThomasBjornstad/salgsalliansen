// refer to question 2 before development starts for scope document
// get URL query string




function getQueryStringValue(key) {
      return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}
// variable for the id
var id = getQueryStringValue("id");

fetch('https://api.magicthegathering.io/v1/cards/' + id)
      .then(result => result.json())
      .then((res) => {
            specificCard(res);
      })

      .catch(err => console.log(err))

// NOTE: Creating specific card.
function specificCard(result) {
      var cardDetails = result.card;
      console.log(cardDetails);

      var cardImage = document.getElementById('cardImage');
      var image = document.createElement("img");
      image.src = cardDetails.imageUrl;
      image.style.width = "100%";
      cardImage.appendChild(image);

      var cardDetailsDiv = document.getElementById('cardDetails');

      var header = document.createElement("h2");
      header.textContent = cardDetails.name;

      var div1 = document.createElement("div");
      var div1Text = cardDetails.text;
      var b1 = document.createElement("b");
      b1.textContent = "About: ";

      var div2 = document.createElement("div");
      var b2 = document.createElement("b");
      b2.textContent = "Rarity: ";

      var div3 = document.createElement("div");
      var div3Text = cardDetails.colors;
      var b3 = document.createElement("b");
      b3.textContent = "Color: ";

      cardDetailsDiv.appendChild(header);
      cardDetailsDiv.appendChild(div1);
      cardDetailsDiv.appendChild(div2);
      cardDetailsDiv.appendChild(div3);
      div1.appendChild(b1);
      div2.appendChild(b2);
      div3.appendChild(b3);

      div1.innerHTML += cardDetails.text;
      div2.innerHTML += cardDetails.rarity;
      div3.innerHTML += cardDetails.colors;

      document.getElementById('specificLoader').style.display = "none";
}
