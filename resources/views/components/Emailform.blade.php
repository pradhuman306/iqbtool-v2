<form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <div>
        <p>
            <label for="full_name">{{ __('Full Name') }}</label>
            <input type="text" id="full_name" name="full_name" placeholder="{{ __('Enter your full name') }}" required>
        </p>
        <p>
            <label for="email">{{ __('Email Address') }}</label>
            <input type="email" id="email" name="email" placeholder="{{ __('Enter your email address') }}" required>
        </p>
        <p>
            <label for="message">{{ __('Message') }}</label>
            <textarea id="message" name="message" rows="5" placeholder="{{ __('Enter your message') }}" required></textarea>
        </p>
        <p>
            <input type="submit" value="{{ __('Send a message') }}" class="btn wpcf7-submit">
        </p>
    </div>
</form>