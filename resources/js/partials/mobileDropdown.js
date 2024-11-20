// mobile dropdown

const mobileDropdown = document.querySelector("#mobileDropdown2");
const mobileDropdownUl = document.querySelector("#mobileDropdownUl2");


const mobileDropdownHandler = () => {
  if (mobileDropdownUl.classList.contains("max-h-0")) {
      // Otwieramy dropdown
      mobileDropdownUl.classList.remove("max-h-0", "opacity-0");
      mobileDropdownUl.classList.add("max-h-[500px]", "opacity-100");
  } else {
      // Zamykamy dropdown
      mobileDropdownUl.classList.remove("max-h-[500px]", "opacity-100");
      mobileDropdownUl.classList.add("max-h-0", "opacity-0");
  }
  console.log("ok");
};

mobileDropdown && mobileDropdown.addEventListener("click", mobileDropdownHandler);