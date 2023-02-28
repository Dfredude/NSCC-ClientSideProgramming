const sendRequest = () => {
    try {
        const fields = verifyRequiredFields()
        const request = axios({
            method:'post',
            url: "./send.php",
            data: fields
        }).then((response) => {
            console.log(response);
        })
    } catch (e){
        console.error(e)
        $("#alert-container").html($("<div class='alert alert-danger' role='alert'>").text(e.message))
    }
    
    
}

const verifyRequiredFields = () => {
    const required_fields = [
        "first-name",
        "last-name",
        "street-address",
        "province-state",
        "country",
        "email",
        "password1",
        "password2",
    ]
    const other = ["address2", "address3"]
    const form = new FormData()
    for (const required_field of required_fields){
        const jq_obj = $(`#${required_field}`)
        if (jq_obj.val() === "") throw new EvalError(`${required_field} is required!`)
        if (required_field === "email" && !validateEmail(jq_obj.val())) throw new EvalError("Invalid email address")
        if (required_field === "password1" && jq_obj.val().length < 8) throw new EvalError("Password must be at least 8 characters")
        if (required_field === "password2" && jq_obj.val() !== $(`#password1`).val()) throw new EvalError("Passwords do not match")
        form.set(required_field, jq_obj.val())
    }

    for (const field of other) {
        form.set(field, $(`#${field}`).val())
    }
    
    return form
}

// function to validate email
const validateEmail = (email) => {
    const re = /\S+@\S+\.\S+/
    return re.test(email)
}



