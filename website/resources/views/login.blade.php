<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Firebase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input {
            width: 91%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4e54c8;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #3b40a0;
        }
    </style>

    <script src="https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.1.0/firebase-auth.js"></script>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <input type="email" id="email" placeholder="Email">
        <input type="password" id="password" placeholder="Senha">
        <button onclick="login()">Entrar</button>
    </div>

    <script>
        const firebaseConfig = {
            apiKey: "SUA_API_KEY",
            authDomain: "SEU_DOMINIO.firebaseapp.com",
            projectId: "SEU_ID",
            storageBucket: "SEU_BUCKET.appspot.com",
            messagingSenderId: "SENDER_ID",
            appId: "SEU_APP_ID"
        };
        firebase.initializeApp(firebaseConfig);

        function login() {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            firebase.auth().signInWithEmailAndPassword(email, password)
                .then((userCredential) => {
                    const user = userCredential.user;
                    window.location.href = `/perfil?email=${user.email}`;
                })
                .catch((error) => {
                    alert(error.message);
                });
        }
    </script>
</body>
</html>
