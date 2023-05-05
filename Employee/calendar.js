// get the DOM elements
const monthHeading = document.getElementById("month-heading");
const monthName = document.getElementById("month-name");
const year = document.getElementById("year");
const datesContainer = document.getElementById("dates");

// get the current date and time
const currentDate = new Date();

// define an array of weekdays
const weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

// define an array of months
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

// set the month heading and year
monthName.innerText = months[currentDate.getMonth()];
year.innerText = currentDate.getFullYear();

// clear the dates container
datesContainer.innerHTML = "";

// loop through the dates of the current week and add them to the container
for (let i = 0; i < 7; i++) {
  const date = new Date(currentDate);
  date.setDate(date.getDate() - date.getDay() + i);
  const day = date.getDate();
  const weekday = weekdays[date.getDay()];
  const isToday = date.toDateString() === new Date().toDateString();
  const dateElement = document.createElement("div");
  dateElement.classList.add("flex", "rounded-lg", "mx-1", "cursor-pointer", "justify-center", "w-10");
  if (isToday) {
    dateElement.classList.add("bg-pink-600", "text-white", "shadow-lg", "font-bold");
  }
  dateElement.innerHTML = `
    <div class="flex items-center px-4 py-4">
      <div class="text-center">
        <p class="text-gray-900 ${isToday ? "text-white" : ""} text-sm transition-all duration-300">${weekday}</p>
        <p class="text-gray-900 ${isToday ? "text-white" : ""} mt-3 ${isToday ? "font-bold" : ""} transition-all duration-300">${day}</p>
      </div>
    </div>
  `;
  datesContainer.appendChild(dateElement);
}
