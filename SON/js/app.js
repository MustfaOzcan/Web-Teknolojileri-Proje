async function getUsers() {
    let url = 'https://thronesapi.com/api/v2/Characters';
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}
async function renderUsers() {
    let users = await getUsers();
    let html = '';
    users.forEach(user => {
        let htmlSegment = `<div class="user">

                        <br>   
                        <img src="${user.imageUrl}">
                        <br>
                         <h2><i>Ad:<i></h2> 
                         <h2>${user.firstName} ${user.lastName}</h2>
                         <hr>
                        <h2><i>Unvan:<i></h2>
                        <h3>${user.title}</h3>
                        <hr>
                        <h2><i>Hanedan:<i></h2>
                        <h2>${user.family}</h2>
                        <br>
                        <hr>
                        </div>`;

        html += htmlSegment;
    });

    let container = document.querySelector('.container');
    container.innerHTML = html;
}
renderUsers();