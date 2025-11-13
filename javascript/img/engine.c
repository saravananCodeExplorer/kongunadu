console.log("Start");

setTimeout(() => {
  console.log("Hello from setTimeout");
}, 2000);

console.log("End");

🔹 Step 2 — Web API runs timer

The browser (not JS) runs a 2-second timer in the Web API area.

While timer is running, JS keeps executing other code.

🔹 Step 3 — Timer finishes

After 2 seconds, the Web API says:

“My timer is done! Here’s the callback function.”

That callback (() => console.log("Hello from setTimeout")) is now moved to the Callback Queue.

🔹 Step 4 — Event Loop checks

The Event Loop keeps checking:

“Is the Call Stack empty?”

When the stack becomes empty (because all synchronous code has finished),
the Event Loop moves the callback from the Callback Queue → Call Stack.

🔹 Step 5 — Callback executes

Now the callback runs inside the Call Stack: