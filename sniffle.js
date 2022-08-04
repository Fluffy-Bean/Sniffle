/*
  Close notification
  Used by the notifications themself, don't use in code
*/
function sniffleClose(a) {
  a.closest(".sniffle-notification").style.transform="translateY(-5rem) scale(0.8)";
  a.closest(".sniffle-notification").style.opacity="0";

  setTimeout(function(){
    a.closest(".sniffle-notification").style.display="none";
  }, 200);
};


/*
  Add notification

  Header > Required
    Takes in String input

  Description > Required
    Takes in String input

  Img > Optional
    Takes in String input
*/
function sniffleAdd(header, description, img) {
  // Img was not added, skipping
  if (typeof img === 'undefined') {
    img = '';
  } else {
    img = `<img class="sniffle-img" src="${img}">`;
  }

  var newSniffle = `<div class="sniffle-notification" onclick="sniffleClose(this)">\
  ${img}\
  <div class="sniffle-content">\
  <p class="sniffle-header">${header}</p>\
  <p class="sniffle-description">${description}</p>\
  </div>\
  </div>`;

  $(".sniffle").append(newSniffle);
};
