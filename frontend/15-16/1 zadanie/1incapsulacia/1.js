class Counter {
    #value; // Приватное свойство

    constructor() {
        this.#value = 0; // Инициализируем значение
    }

    increment() {
        this.#value++;
        return this.#value;
    }

    decrement() {
        if (this.#value > 0) this.#value--;
        return this.#value;
    }

    getValue() {
        return this.#value; // Предоставляем доступ к значению
    }
}

// Работа с HTML
const counter = new Counter();
const counterDisplay = document.getElementById("counter");

document.getElementById("increment").addEventListener("click", () => {
    counterDisplay.textContent = counter.increment();
});

document.getElementById("decrement").addEventListener("click", () => {
    counterDisplay.textContent = counter.decrement();
});
