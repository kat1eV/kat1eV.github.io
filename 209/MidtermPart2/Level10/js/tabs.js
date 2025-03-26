const NRCITIES = ['New York City', 'Newark', 'San Francisco', 'Philidelphia', 'Bozeman', 'Boston', 'Oakland', ''];


function createTabs() {
    const tabButtonsContainer = document.getElementById("tab-buttons");
    const tabContentsContainer = document.getElementById("tab-contents");
    NRCITIES.forEach(city => {
        
        const button = document.createElement('button');
        button.classList.add('tablinks');
        button.textContent = city;
        button.setAttribute('data-tab', city);
        button.onclick = openCity; 
        tabButtonsContainer.appendChild(button);


        const content = document.createElement('div');
        content.id = city;
        content.classList.add('tabcontent');
        content.innerHTML = `<h3>${city}</h3><p>${city} was added as a tab dynamically.</p>`; 
        tabContentsContainer.appendChild(content);
    });
}



function openCity(evt) {
    var i, tabcontent, tablinks;
    var cityName = evt.currentTarget.getAttribute("data-tab");

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("active");
  }


  window.onload = createTabs;