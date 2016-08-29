# Ninja Forms - Google Analytics

Trigger a custom GA event for Ninja Forms (v3) Submissions.

*No Configuration Necessary.*

Automatically sends an event hit for all form submission with the following signature:

```js
ga( 'send', 'event', 'form', 'submit', formTitle );
```

Note: This WordPress plugin does not enqueue or configure Google Analytics.