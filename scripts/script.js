// refer to question 1 before development starts for scope document
// connect to this api https://api.magicthegathering.io/v1/card


// NOTE: FETCHING JSON

var requestUrl = 'https://api.magicthegathering.io/v1/cards';

fetch('https://api.magicthegathering.io/v1/cards', {
    mode: "cors"
  })
  .then(result => result.json())
  .then((res) => {
    createCards(res);
  })

  .catch(err => console.log(err))


// NOTE: Creating cards

function createCards(result) {

  var cardArray = result.cards;
  var htmlCard = document.getElementById('cards');
  var loader = document.getElementById('loader');

  if(htmlCard.innerHTML=""){

  }

  for (i = 0; i < cardArray.length; i++) {

    var column = document.createElement('div');
    column.className = "col-sm-4";
    htmlCard.appendChild(column);

    var cardContainer = document.createElement('div');
    cardContainer.className = "card-container";
    column.appendChild(cardContainer);

    var header = document.createElement("h4");
    cardContainer.appendChild(header);

    var image = document.createElement("img");
    image.style.width = "100%";
    cardContainer.appendChild(image);

    var viewMoreBtn = document.createElement("a");
    var imageLink = "card-specific.html?id=" + cardArray[i].id;
    viewMoreBtn.innerHTML = "View More";
    viewMoreBtn.className = "btn btn-success";
    cardContainer.appendChild(viewMoreBtn);

    header.innerHTML = cardArray[i].name;
    image.src = cardArray[i].imageUrl;

    viewMoreBtn.setAttribute("href", imageLink);

  };
}








function searchChards() {

  // NOTE: New API-request.
  var request = new XMLHttpRequest();
  request.open("GET", requestUrl, false);
  request.send('null');
  var JSONData = request.responseText;
  var parsedJSON = JSON.parse(JSONData);


  var htmlSection = document.getElementById('cards');
  var searchString = document.getElementById('search').value;
  var cardArray = parsedJSON.cards;
  var results = [];

    // NOTE: Using the filter() method to search throught the array. Making the search case insensitive and returning the index of the matching objects.
    var filteredArray = cardArray.filter(function(card) {
      return card.name.toLowerCase().indexOf(searchString.toLowerCase()) !== -1;
    })

    results = filteredArray;



    // NOTE: If the search gave 0 results
    if (results.length == 0) {

      htmlSection.innerHTML = "";

      var noResults = document.createElement('p');
      noResults.style.color = "red";
      noResults.style.paddingTop = "10px";
      htmlSection.appendChild(noResults);

      var searchTipsHeader = document.createElement("h4");
      var searchTips = document.createElement("ul");
      var listItemOne = document.createElement("li");
      var listItemTwo = document.createElement("li");
      searchTips.className = "list-unstyled";
      searchTips.style.color = "#3A99CD";
      htmlSection.appendChild(searchTipsHeader);
      htmlSection.appendChild(searchTips);
      searchTips.appendChild(listItemOne);
      searchTips.appendChild(listItemTwo);

      // NOTE: Search feedback.

      noResults.textContent = searchString.charAt(0).toUpperCase() + searchString.slice(1) + " was nowhere to be found.";

      searchTipsHeader.textContent = "Secret search tips:";
      listItemOne.textContent = "- Search by name: 'Adorable Kitten'";
      listItemTwo.textContent = "- Check your spelling: Would you name your kid " + searchString + "?";

    } else {

      htmlSection.innerHTML = "";
      var searchResults = document.createElement("p");
      searchResults.style.paddingTop = "10px";
      searchResults.style.color = "green";
      htmlSection.appendChild(searchResults);
      if (results.length == 1) {
        searchResults.textContent = "Your search gave " + results.length + " result.";
      } else if (results.length === cardArray.length) {
        searchResults.textContent = "";
      } else {
        searchResults.textContent = "Your search gave " + results.length + " results.";
      }


      for (var i = 0; i < results.length; i++) {

        var column = document.createElement('div');
        column.className = "col-sm-4";
        htmlSection.appendChild(column);

        var cardContainer = document.createElement('div');
        cardContainer.className = "card-container"
        column.appendChild(cardContainer);

        var header = document.createElement("h4");
        cardContainer.appendChild(header);

        var image = document.createElement("img");
        image.style.width = "100%";
        cardContainer.appendChild(image);

        var viewMoreBtn = document.createElement("a");
        var imageLink = "card-specific.html?id=" + results[i].id;
        viewMoreBtn.textContent = "View More";
        viewMoreBtn.className = "btn btn-success";
        cardContainer.appendChild(viewMoreBtn);

        header.textContent = results[i].name;
        image.src = results[i].imageUrl;

        viewMoreBtn.setAttribute("href", imageLink);
      }
    }
};
