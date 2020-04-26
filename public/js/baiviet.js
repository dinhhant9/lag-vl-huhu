let bannerElement = document.getElementById("banner");
let patchElement = document.getElementById("patch");
let bannerWidth = bannerElement.offsetWidth;
if(bannerWidth < 860) {
  patchElement.remove();
} 