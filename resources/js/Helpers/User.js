class User {
    login(data) {
        axios.post('/api/auth/login', data)
            .then(function(response) {
                console.log(response.data)
            })

        .catch(function(errors) {
            console.log(errors.response.data);
        })
    }
}
export default User = new User()

