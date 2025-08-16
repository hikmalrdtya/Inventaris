const fileInput = document.getElementById("gambar");
const fileName = document.getElementById("file-name");

if (fileInput && fileName) {
    fileInput.addEventListener("change", function () {
        if (this.files && this.files.length > 0) {
            fileName.textContent = this.files[0].name;
        } else {
            fileName.textContent = "No File Choosen";
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const msg = document.getElementById("msg");
    if (!msg || msg.childElementCount === 0) return;

    setTimeout(() => {
        msg.style.transition = "opacity .5s ease";
        msg.style.opacity = "0";
        setTimeout(() => msg.remove(), 500);
    }, 3000);
});

document.addEventListener("DOMContentLoaded", () => {
    const el = document.getElementById("greeting");

    const greetings = [
        `Hello, welcome ${window.userName}`,
        `Hey ${window.userName}, nice to see you again`,
        `Hi ${window.userName}, how’s your day going?`,
        `What’s up ${window.userName}?`,
        `Good to have you back, ${window.userName}!`,
    ];

    const conversations = [
        "What are your plans for today?",
        "Don’t forget to stay motivated",
        "If you feel tired, remember to take a break",
        "Hope you’re having a wonderful day",
        "Have you had breakfast yet?",
        "What are you working on right now?",
        "Remember to drink enough water",
        "Keep up the good vibes",
        "How’s everything going so far?",
        "Don’t forget to smile today",
    ];

    const sleep = (ms) => new Promise((r) => setTimeout(r, ms));
    const getRandomItems = (arr, n) =>
        [...arr].sort(() => Math.random() - 0.5).slice(0, n);

    let isTyping = false;
    let isInitialRunning = true;
    let isCooldown = false;

    function typeText(text, speed = 55) {
        return new Promise((resolve) => {
            isTyping = true;
            el.textContent = "";
            let i = 0;

            const cursor = document.createElement("span");
            cursor.className = "typing-cursor";
            cursor.textContent = "▍";
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
        let candidate,
            tries = 0;
        do {
            candidate =
                conversations[Math.floor(Math.random() * conversations.length)];
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
        await sleep(5000);
        await typeText(c1);
        await sleep(5000);
        await typeText(c2);

        lastTwo = [c1, c2];
        isInitialRunning = false;
    }

    el.addEventListener("click", async () => {
        if (isTyping || isInitialRunning || isCooldown) return;

        isCooldown = true;
        const next = pickConversation();
        await typeText(next);

        setTimeout(() => {
            isCooldown = false;
        }, 2000);
    });

    runInitial();
});
