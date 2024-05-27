<?php
$webhookurl = "YOUR_WEBHOOK_URL";
$json_data = json_encode([
    // Message
    "content" => $_POST[""],

    // Username
    "username" => $_POST[""],

    // Avatar URL
    "avatar_url" => $_POST[""],

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => $_POST[""],

            // Embed Type
            "type" => "rich",

            // Embed Description
            "description" => "",

            // URL of title link
            "url" => $_POST[""],

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => date("c", strtotime("now")),

            // Embed left border color in HEX
            "color" => $_POST[""],

            // Footer
            "footer" => [
                "text" => $_POST[""],
                "icon_url" => ""
            ],

            // Image to send
            "image" => [
                "url" => ""
            ],

            // Thumbnail
            "thumbnail" => [
                "url" => ""
            ],

            // Author
            "author" => [
                "name" => "",
                "url" => ""
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Field #1 Name",
                    "value" => "Field #1 Value",
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "Field #2 Name",
                    "value" => "Field #2 Value",
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


$ch = curl_init($webhookurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
curl_close($ch);
?>
<?php if (isset($_GET["preview"])) { ?>
<?php } else { ?>
    <html lang="en">

    <head>
        <title>Discord Webhook</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="validationCustom01" required placeholder="First name">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="validationCustom02" required placeholder="Last name">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 form-floating">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Username">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" id="validationCustom03" required placeholder="City">
                    <label for="validationCustom03" class="form-label">City</label>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3 form-floating">
                    <input type="text" class="form-control" id="validationCustom05" required placeholder="Zip">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } ?>
