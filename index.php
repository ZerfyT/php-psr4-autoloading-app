<?php

require_once realpath(__DIR__) . '/init.php';

$myClass = new Services\MyClass();
$myClass->foo();
$myClass->jsonEncodeAndDecode();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .my-template-container {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 8px;
            background-color: #eee;
            box-shadow: 0 0 4px #ccc;
        }

        h3 {
            color: green;
        }

        .template-no {
            color: red;
        }

        button {
            border: 1px solid #ccc;
            padding: 4px 8px;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.5s ease;
        }

        button:hover {
            background-color: #ccc;
        }
    </style>
</head>

<body>
    <h1>PHP Test Page</h1>

    <template id="my-template">
        <div class="my-template-container">
            <h3>This is a template No: <span class="template-no"></span></h3>
            <button data-no="" type="button">Click Me</button>
        </div>
    </template>

    <script>
        const template = document.querySelector('#my-template');
        // document.body.appendChild(template.content.cloneNode(true));
        // document.body.appendChild(template.content.cloneNode(true));

        const templateNos = [1, 2, 3, 4, 5];

        templateNos.forEach((templateNo) => {
            const cloneNode = template.content.cloneNode(true);
            cloneNode.querySelector('.template-no').textContent = templateNo;
            cloneNode.querySelector('button').dataset.no = templateNo;
            document.body.appendChild(cloneNode);
        });

        document.querySelectorAll('button').forEach((button) => {
            console.log(button);

            button.addEventListener('click', (event) => {
                console.log(event.target.dataset.no);
            });
        });

    </script>
</body>

</html>