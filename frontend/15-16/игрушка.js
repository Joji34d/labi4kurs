// =============================
// Класс для управления игрой
// =============================
class TicTacToe {
  constructor() {
      // Инициализация состояния игры
      this.currentPlayer = "X"; // Текущий игрок
      this.board = Array(9).fill(null); // Игровое поле (9 ячеек, изначально пустое)
      this.winningCombinations = [ // Возможные выигрышные комбинации
          [0, 1, 2],
          [3, 4, 5],
          [6, 7, 8],
          [0, 3, 6],
          [1, 4, 7],
          [2, 5, 8],
          [0, 4, 8],
          [2, 4, 6],
      ];
      this.boardElement = document.querySelector(".board"); // HTML элемент игрового поля
      this.statusElement = document.querySelector(".status"); // HTML элемент для отображения статуса игры
      this.restartButton = document.querySelector(".restart"); // Кнопка "Начать заново"
  }

  // Метод для создания игрового поля
  createBoard() {
      this.boardElement.innerHTML = ""; // Очищаем поле
      for (let i = 0; i < 9; i++) {
          const cell = document.createElement("div");
          cell.classList.add("cell"); // Добавляем класс для стилизации
          cell.dataset.index = i; // Индекс клетки
          this.boardElement.appendChild(cell); // Добавляем клетку на игровое поле
      }
  }

  // Метод для проверки победителя
  checkWinner() {
      for (let combination of this.winningCombinations) {
          const [a, b, c] = combination;
          if (
              this.board[a] &&
              this.board[a] === this.board[b] &&
              this.board[a] === this.board[c]
          ) {
              return this.board[a]; // Возвращаем символ победителя
          }
      }
      return this.board.includes(null) ? null : "draw"; // Ничья, если нет пустых ячеек
  }

  // Метод для обработки хода
  updateGame(cell, index) {
      if (this.board[index] || this.checkWinner()) return; // Нельзя ходить, если клетка занята или есть победитель

      this.board[index] = this.currentPlayer; // Обновляем состояние клетки
      cell.textContent = this.currentPlayer; // Отображаем символ на поле
      cell.classList.add("taken"); // Делаем клетку недоступной

      const winner = this.checkWinner(); // Проверяем победителя
      if (winner) {
          // Обновляем статус игры в зависимости от результата
          this.statusElement.textContent =
              winner === "draw" ? "Ничья!" : `Победитель: Игрок ${winner}`;
      } else {
          // Смена хода
          this.currentPlayer = this.currentPlayer === "X" ? "O" : "X";
          this.statusElement.textContent = `Ход: Игрок ${this.currentPlayer}`;
      }
  }

  // Метод для сброса игры
  restartGame() {
      this.currentPlayer = "X"; // Сброс текущего игрока
      this.board = Array(9).fill(null); // Очистка поля
      this.statusElement.textContent = "Ход: Игрок X"; // Сброс статуса
      this.createBoard(); // Пересоздаём поле
      this.addEventListeners(); // Добавляем обработчики событий
  }

  // Метод для добавления обработчиков событий
  addEventListeners() {
      const cells = document.querySelectorAll(".cell");
      cells.forEach((cell) => {
          cell.addEventListener("click", () => {
              this.updateGame(cell, cell.dataset.index); // Обработка клика по клетке
          });
      });

      this.restartButton.addEventListener("click", () => this.restartGame()); // Обработка клика по кнопке "Начать заново"
  }

  // Метод для старта игры
  startGame() {
      this.createBoard(); // Создаём игровое поле
      this.addEventListeners(); // Добавляем события
  }
}

// =============================
// Запуск игры
// =============================
const game = new TicTacToe(); // Создаём экземпляр игры (инкапсуляция логики в объекте)
game.startGame(); // Стартуем игру
