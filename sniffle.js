function sniffleClose(a) {
  a.closest(".sniffle-notification").style.transform="translateY(-5rem) scale(0.8)";
  a.closest(".sniffle-notification").style.opacity="0";

  setTimeout(function(){
    a.closest(".sniffle-notification").style.display="none";
  }, 200);
};
