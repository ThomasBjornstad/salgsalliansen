// refer to question 3 before development starts for scope document


// NOTE: Replace the word “Magic” with the “Something” in all the text inside the div with “aboutText” ID attached to it.

// NOTE: Declaring a new variable from the paragraph in the HTML-document.
var text = document.getElementById('aboutText').innerHTML;


// NOTE: Removing the spaces from the text.
var textArray = text.split(" ");


// NOTE: Replacing all instances of Magic with Something.
for (var i = 0; i < textArray.length; i++) {
      textArray[i] = textArray[i].replace("Magic", "Something");
}

// NOTE: newText with Something in stead of Magic.
newText = textArray.join(" ");


// NOTE: Return the new array to the paragraph in the HTML-document.
document.getElementById('aboutText').innerHTML = newText;



// NOTE: If you click on this heading it should toggle display: block and display none on the div with the “moreInfoContent” ID attached to it.

// NOTE: The element to trigger the toggle.
var infoTrigger = document.getElementById('moreInfoTrigger');

// NOTE: Used to check if "moreInfoTrigger is clicked."
var isContentVisible = false;

// NOTE: Changes the isContentVisible to opposite when clicked.
infoTrigger.onclick = function() {
      isContentVisible = !isContentVisible;
};

document.getElementById('moreInfoTrigger').addEventListener('click', function(e) {
  document.getElementById('moreInfoContent').classList.toggle('more-content-visible');
  document.getElementById('chevron').classList.toggle('rotate');
});

// NOTE: If isContentVisible, display block.
//infoTrigger.addEventListener('click', function() {
      //var textField = document.getElementById('moreInfoContent');
      //if (isContentVisible) {
        //    textField.style.display = 'block';
      //} else {
    //        textField.style.display = 'none';
  //    }
//});
