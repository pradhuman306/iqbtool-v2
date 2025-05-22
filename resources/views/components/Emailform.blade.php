<form method="POST" action="/email-message" >
    @csrf

    <div >
        <label for="full_name" >Full Name</label>
        <input type="text" id="full_name" name="full_name" placeholder="Enter your full name"
                required>
    </div>

    <div >
        <label for="email" >Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address"
                required>
    </div>

    <div >
        <label for="message" >Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Enter your message"
                   required></textarea>
    </div>

    <button type="submit"
            >
        Send a message
    </button>
</form>
