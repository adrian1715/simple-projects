var doSomething,
  toDo = [];

while (doSomething != "quit") {
  doSomething = prompt(
    "What would you like to do? (open the console.log to see all details)\n\nNew: to add a new todo\nList: to list all todo's\nQuit: to quit the app"
  );
  if (doSomething != doSomething.toLowerCase())
    doSomething = doSomething.toLowerCase();
  switch (doSomething) {
    case "new":
      toDo.push(
        prompt("Enter a new todo (type 'go back' to return to the menu)")
      );
      var num = toDo.length;

      if (toDo[num - 1] === "go back") {
        toDo.pop();
        break;
      }

      console.log(`${toDo[num - 1]} added to the list!`);

      break;

    case "list":
      alert("The list will be shown in the console");

      console.log("**** LIST  ****");
      for (var j = 0; j < toDo.length; j++) {
        console.log(`${j + 1}- ${toDo[j]}`);
      }
      console.log("**************");
      break;

    case "delete":
      var index = 1.5;
      while (
        (Math.floor(index) != index && index !== "go back") ||
        index > toDo.length ||
        index < 0
      ) {
        index = prompt(
          "Enter the index of the todo you want to delete (type 'go back' to return to the menu)"
        );

        if (index === "go back") {
          break;
        }

        if (
          (Math.floor(index) != index && index !== "go back") ||
          index > toDo.length ||
          index < 0
        ) {
          console.log("Invalid value! Try again!");
        }
      }

      index = parseInt(index);

      if (Math.floor(index) === index) {
        console.log(`${toDo[index - 1]} deleted!`);
        toDo.splice(index - 1, 1);
      }

      break;

    default:
      if (doSomething != "quit") console.log("Invalid value! Try again!");
  }
}
console.log("You quit!");
