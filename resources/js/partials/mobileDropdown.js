// Elementy dla dropdown-rooms
const mobileDropdownRooms = document.querySelector("#dropdown-rooms");
const mobileDropdownRoomsUl = document.querySelector("#dropdown-rooms-ul");

// Elementy dla dropdown-offer
const mobileDropdownOffer = document.querySelector("#dropdown-offer");
const mobileDropdownOfferUl = document.querySelector("#dropdown-offer-ul");

// Funkcja obsługująca dowolny dropdown
const mobileDropdownHandler = (dropdownUl) => {
  if (dropdownUl.classList.contains("max-h-0")) {
    // Otwieramy dropdown
    dropdownUl.classList.remove("max-h-0", "opacity-0");
    dropdownUl.classList.add("max-h-[500px]", "opacity-100");
  } else {
    // Zamykamy dropdown
    dropdownUl.classList.remove("max-h-[500px]", "opacity-100");
    dropdownUl.classList.add("max-h-0", "opacity-0");
  }
  console.log("ok");
};

// Nasłuch dla dropdown-rooms
mobileDropdownRooms && 
  mobileDropdownRooms.addEventListener("click", () => mobileDropdownHandler(mobileDropdownRoomsUl));

// Nasłuch dla dropdown-offer
mobileDropdownOffer && 
  mobileDropdownOffer.addEventListener("click", () => mobileDropdownHandler(mobileDropdownOfferUl));
