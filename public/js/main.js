document.addEventListener("DOMContentLoaded", () => {
    const msg = document.getElementById("msg");
    if (!msg || msg.childElementCount === 0) return;

    setTimeout(() => {
        msg.style.transition = "opacity .5s ease";
        msg.style.opacity = "0";
        setTimeout(() => msg.remove(), 500);
    }, 3000);
});

document.addEventListener('DOMContentLoaded', () => {
  const el = document.getElementById('greeting');

  const greetings = [
    `Hallo, Selamat Datang ${window.userName} 👋`,
    `Hai ${window.userName}, senang ketemu kamu lagi 😊`,
    `Halo ${window.userName}, gimana kabarnya hari ini? 🌟`,
  ];

  const conversations = [
    "Hari ini mau ngapain nih? 🤔",
    "Jangan lupa semangat ya 💪",
    "Kalau capek jangan lupa istirahat 😴",
    "Semoga harimu menyenangkan 🌸",
    "Udah sarapan belum? 🍽️",
    "Lagi sibuk apa sekarang? 📚",
    "Jangan lupa minum air putih ya 💧",
  ];

  const sleep = (ms) => new Promise(r => setTimeout(r, ms));
  const getRandomItems = (arr, n) => [...arr].sort(() => Math.random() - 0.5).slice(0, n);

  let isTyping = false;
  function typeText(text, speed = 55) {
    return new Promise(resolve => {
      isTyping = true;
      el.textContent = '';
      let i = 0;

      // kursor kedip
      const cursor = document.createElement('span');
      cursor.className = 'typing-cursor';
      cursor.textContent = '▍';
      el.appendChild(cursor);

      (function step() {
        if (i < text.length) {
          cursor.remove();
          el.textContent += text[i++];
          el.appendChild(cursor);
          setTimeout(step, speed);
        } else {
          cursor.remove();
          el.textContent = text;
          isTyping = false;
          resolve();
        }
      })();
    });
  }

  let lastTwo = [];
  function pickConversation() {
    let candidate, tries = 0;
    do {
      candidate = conversations[Math.floor(Math.random() * conversations.length)];
      tries++;
      if (tries > 20) break;
    } while (lastTwo.includes(candidate));

    lastTwo.push(candidate);
    if (lastTwo.length > 2) lastTwo.shift();
    return candidate;
  }

  async function runInitial() {
    const greet = greetings[Math.floor(Math.random() * greetings.length)];
    const [c1, c2] = getRandomItems(conversations, 2);

    await typeText(greet);
    await sleep(3000);
    await typeText(c1);
    await sleep(3000);
    await typeText(c2);

    lastTwo = [c1, c2];
  }

  el.addEventListener('click', async () => {
    if (isTyping) return;
    const next = pickConversation();
    await typeText(next);
  });

  runInitial();
});
