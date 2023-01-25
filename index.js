// Get references to the form and birthday list
const form = document.querySelector("form");
const birthdayList = document.querySelector("#birthday-list");

// Add a submit event listener to the form
form.addEventListener("submit", submitBirthday);

// Function to handle form submission
function submitBirthday(event) {
  event.preventDefault();

  // Get the name and date of birth from the form
  const name = event.target.elements.name.value;
  const dob = event.target.elements.dob.value;

  // Create a new list item with the name and date of birth
  const newItem = document.createElement("li");
  newItem.innerHTML = `${name} - ${dob}`;

  // Add the new item to the birthday list
  birthdayList.appendChild(newItem);

  // Clear the form fields
  event.target.elements.name.value = "";
  event.target.elements.dob.value = "";
}

