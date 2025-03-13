class Button {
    constructor(elementId) {
        this.element = document.getElementById(elementId);
    }

    click() {
        this.element.addEventListener("click", () => {
            alert(`${this.element.id} нажата!`);
        });
    }
}

class SpecialButton extends Button {
    click() {
        this.element.addEventListener("click", () => {
            alert(`${this.element.id} — специальная кнопка!`);
        });
    }
}

// Создаём экземпляры классов
const basicButton = new Button("basicButton");
basicButton.click();

const specialButton = new SpecialButton("specialButton");
specialButton.click();
