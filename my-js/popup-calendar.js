document.onmousemove = moveTip;
function moveTip(e) {
  popupStyle = document.getElementById("my-popup").style;
  w = 150; // Ширина слоя
  // Для браузера IE
  if (document.all) { 
    x = event.x + document.body.scrollLeft; 
    y = event.y + document.body.scrollTop; 
  // Для остальных браузеров
  } else { 
    x = e.pageX; // Координата X курсора
    y = e.pageY; // Координата Y курсора
  }
  // Показывать слой справа от курсора 
  if ((x + w + 10) < document.body.clientWidth) { 
    popupStyle.left = x + 'px';
  // Показывать слой слева от курсора
  } else { 
    popupStyle.left = x - w + 'px';
  }
  // Положение от верхнего края окна браузера
  popupStyle.top = y - 100 + 'px';
}