document.onmousemove = moveTip;
function moveTip(e) {
  popupStyle = document.getElementById("my-footer-popup").style;
  w = 150; // Ширина слоя
  // Для браузера IE
  if (document.all) { 
    x = event.x + document.body.scrollLeft; 
    y = event.y + document.body.scrollTop; 
  // Для остальных браузеров
  } else { 
    x = e.clientX; // Координата X курсора
    y = e.clientY; // Координата Y курсора
  }
  // Показывать слой справа от курсора 
  if ((x + 10 + w) < document.body.clientWidth) { 
    popupStyle.left = x + 10 + 'px';
  // Показывать слой слева от курсора
  } else { 
    popupStyle.left = x - 10 - w + 'px';
  }
  // Положение от верхнего края окна браузера
  popupStyle.top = y + 10 + 'px';
}