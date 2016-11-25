function dimMessage() {

  // which element was clicked GLOBAL variable
  elementID = this.id;
  console.log(elementID);

  // This DIV contains 'dimmed background' and the 'message'
  var dimOverlay = document.createElement("DIV");
  document.body.appendChild(dimOverlay);
  dimOverlay.setAttribute("id", "dim-element");
  dimOverlay.className = 'dimmed';

  // This DIV dimms whole website, when 'clicked' closes the message
  var closeDimBG = document.createElement("DIV");
  document.getElementById("dim-element").appendChild(closeDimBG);
  closeDimBG.setAttribute("id", "close-dim-bg");
  closeDimBG.addEventListener("click", function(){
    closeMessage();
  });

  drawMessageBox(elementID);
}

function drawMessageBox(elementID) {
  var envelope = document.createElement("DIV");                                 // Create a <div> element

  var messageContent = createMessageContent(elementID);
  envelope.innerHTML = messageContent;

  document.getElementById("dim-element").appendChild(envelope);                 // Append <div> to dim-element
  envelope.className = "dim-message-envelope";
}

function createMessageContent(elementID) {
  if (elementID == "askAnything"){
    document.getElementById('message-ask-question-form').className = "dim-message-envelope opened";
    var pageScrolledBy = window.pageYOffset;
    document.getElementById('message-ask-question-form').style.top = pageScrolledBy + "px";
  }
  if (elementID == "contact-us-button"){
    document.getElementById('message-ask-question-form').className = "dim-message-envelope opened";
    var pageScrolledBy = window.pageYOffset;
    document.getElementById('message-ask-question-form').style.top = pageScrolledBy + "px";
  }
  if (elementID == "contactUs"){
  }
}

//exit dimmed-message
function closeMessage() {
  //animate-out
  var envelope = document.getElementsByClassName('dim-message-envelope');
  envelope[0].className = "dim-message-envelope closed";
  var dimEl = document.getElementById('dim-element');
  dimEl.className += " closed";

  // remove fixed-page class from id="content"
  document.getElementById('content').className = '';

  // remove all previously added elements
  setTimeout(function(){
    var el = document.getElementById("dim-element");
    el.parentNode.removeChild(el);
  }, 300);

  // remove 'fixed-page' class
  document.body.className = '';
}

// Event listeners
window.onload = function() {
  // Open messages
  if(document.getElementById("askAnything")){
    document.getElementById("askAnything").addEventListener("click", dimMessage);
  }
  if(document.getElementById("contact-us-button")){
    document.getElementById("contact-us-button").addEventListener("click", dimMessage);
  }
  if(document.getElementById("button-show-moderators")){
    document.getElementById("button-show-moderators").addEventListener("click", dimMessage);
  }
  // Close messages
  if(document.getElementById("button-close-form")){
    document.getElementById("button-close-form").addEventListener("click", closeMessage);
  }
};
