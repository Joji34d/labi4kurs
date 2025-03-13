class Engine {
    start() {
        return "Двигатель работает.";
    }
}

class Car {
    constructor() {
        this.engine = new Engine();
    }

    start() {
        return `${this.engine.start()} Машина едет!`;
    }
}

// Работа с HTML
const car = new Car();
document.getElementById("startCar").addEventListener("click", () => {
    document.getElementById("carStatus").textContent = car.start();
});
