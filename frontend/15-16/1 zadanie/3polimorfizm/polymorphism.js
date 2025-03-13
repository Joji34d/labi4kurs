class Button {
    constructor(elementId) {
        this.element = document.getElementById(elementId);
    }

    click() {
        this.element.addEventListener("click", () => {
            alert("Кнопка нажата!");
        });
    }
}

class AlertButton extends Button {
    click() {
        this.element.addEventListener("click", () => {
            alert("Это специальная кнопка!");
        });
    }
}

// Полиморфизм в действии
const button1 = new Button("button1");
button1.click();

const button2 = new AlertButton("button2");
button2.click();
