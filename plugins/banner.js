const cols = 3;
const main = document.querySelector('#item');

function bannerUse() {
  let parts = [];

  let current = 0;
  let playing = false;

  let dotBox = document.createElement('div');
  dotBox.className = 'dotBox';
  main.appendChild(dotBox);

  for (let col = 0; col < cols; col++) {
    let part = document.createElement('div');
    part.className = 'part';
    let el = document.createElement('div');
    el.className = 'section';
    let alink = document.createElement('a');
    alink.className = 'bannerLink';
    let alinkHref = bannerInfo[current].link;
    alink.setAttribute('href', alinkHref);
    let img = document.createElement('img');
    img.src = bannerInfo[current].src;

    // dot
    let dot = document.createElement('div');
    dot.className = 'dot';

    alink.appendChild(img);
    el.appendChild(alink);
    part.style.setProperty('--x', (-100 / cols) * col + 'vw');
    part.appendChild(el);
    main.appendChild(part);
    parts.push(part);

    dotBox.appendChild(dot);
  }

  let animOptions = {
    duration: 2.3,
    ease: Power4.easeInOut,
  };

  function go(dir) {
    if (!playing) {
      playing = true;
      if (current + dir < 0) current = bannerInfo.length - 1;
      else if (current + dir >= bannerInfo.length) current = 0;
      else current += dir;

      function up(part, next) {
        part.appendChild(next);
        gsap.to(part, { ...animOptions, y: -main.clientHeight }).then(function () {
          part.children[0].remove();
          gsap.to(part, { duration: 0, y: 0 });
        });
      }

      function down(part, next) {
        part.prepend(next);
        gsap.to(part, { duration: 0, y: -main.clientHeight });
        gsap.to(part, { ...animOptions, y: 0 }).then(function () {
          part.children[1].remove();
          playing = false;
        });
      }

      for (let p in parts) {
        let part = parts[p];
        let next = document.createElement('div');
        next.className = 'section';
        let alink = document.createElement('a');
        alink.className = 'bannerLink';
        alinkHref = bannerInfo[current].link;
        alink.setAttribute('href', alinkHref);
        let img = document.createElement('img');
        img.src = bannerInfo[current].src;
        alink.appendChild(img);
        next.appendChild(alink);

        if ((p - Math.max(0, dir)) % 2) {
          down(part, next);
        } else {
          up(part, next);
        }
      }
    }
  }

  function lerp(start, end, amount) {
    return (1 - amount) * start + amount * end;
  }

  const cursor = document.createElement('div');
  cursor.className = 'cursor';

  const cursorF = document.createElement('div');
  cursorF.className = 'cursor-f';
  let cursorX = 0;
  let cursorY = 0;
  let pageX = 0;
  let pageY = 0;
  let size = 8;
  let sizeF = 36;
  let followSpeed = 0.16;

  document.body.appendChild(cursor);
  document.body.appendChild(cursorF);

  if ('ontouchstart' in window) {
    cursor.style.display = 'none';
    cursorF.style.display = 'none';
  }

  cursor.style.setProperty('--size', size + 'px');
  cursorF.style.setProperty('--size', sizeF + 'px');

  function loop() {
    cursorX = lerp(cursorX, pageX, followSpeed);
    cursorY = lerp(cursorY, pageY, followSpeed);
    cursorF.style.top = cursorY - sizeF / 2 + 'px';
    cursorF.style.left = cursorX - sizeF / 2 + 'px';
    requestAnimationFrame(loop);
  }

  loop();

  function autoPlay() {
    setInterval(function () {
      go(1);
    }, 5000);
  }
  autoPlay();

  const next = document.querySelector('.banner .next');
  const prev = document.querySelector('.banner .prev');

  next.addEventListener('click', function () {
    go(-1);
  });

  prev.addEventListener('click', function () {
    go(1);
  });
}
bannerUse();
