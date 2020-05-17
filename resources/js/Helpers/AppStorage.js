class AppStorage{
    storeToken(token){
        return localStorage.setItem('token', token) //store the token in the local storage (login)
    }

    storeUser(user){
        localStorage.setItem('user', user) //this user comes from authController
    }

    // use just one function
    store(user,token){
        this.storeToken(token)
        this.storeUser(user)
    }

    //clen information inside local storage
    clear(){
        localStorage.removeItem('user')
        localStorage.removeItem('token')
    }

    // get single information if needs
    getToken(){
        return localStorage.getItem('token')
    }
    getUser(){
        return localStorage.getItem('user')
    }
}

export default AppStorage = new AppStorage();