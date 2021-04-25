const profileData = document.getElementById('profile-data')
const displayProfileData = document.getElementById('display-profile-data')
const displayProfileDataButton = document.getElementById('display-profile-data-button')
const editProfileData = document.getElementById('edit-profile-data')
const editProfileDataButton = document.getElementById('edit-profile-data-button')

displayProfileDataButton.addEventListener('click', () => {

    displayProfileData.classList.remove('visually-hidden')
    editProfileData.classList.add('visually-hidden')

    displayProfileDataButton.classList.replace('btn-secondary', 'btn-primary')
    editProfileDataButton.classList.replace('btn-primary', 'btn-secondary')
})

editProfileDataButton.addEventListener('click', () => {

    editProfileData.classList.remove('visually-hidden')
    displayProfileData.classList.add('visually-hidden')
    
    displayProfileDataButton.classList.replace('btn-primary', 'btn-secondary')
    editProfileDataButton.classList.replace('btn-secondary', 'btn-primary')
})