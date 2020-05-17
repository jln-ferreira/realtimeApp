import Token from './Token'
import AppStorage from './AppStorage'

// This page gonna debug after click LOGIN

class User {
    login(data) {
        axios.post('/api/auth/login', data) //goes to API ROUTER LARAVEL
            .then(response => this.responseAfterLogin(response))

        .catch(function(errors) {
            console.log(errors.response.data);
        })
    }


    responseAfterLogin(response){
        const access_token = response.data.access_token
        const username     = response.data.user
        if(Token.isValid(access_token)){
            console.log(access_token)
            AppStorage.store(username, access_token)
        }
    }

    hasToken(){
        const storedToken = AppStorage.getToken()
        
        if(storedToken){
            return Token.isValid(storedToken) ? true : false
        }
        return false
    }

    loggedIn(){
        return this.hasToken()
    }

    logout(){
        AppStorage.clear()
    }

    name(){
        if(this.loggedIn()){
            return AppStorage.getUser()
        }
    }

    id(){
        if(this.loggedIn()){
            const payload = Token.payload(AppStorage.getToken())
            return payload.sub
        }
    }
}
export default User = new User()

