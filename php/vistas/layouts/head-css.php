<!-- Layout config Js -->
<script src="assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="assets/css/custom.min.css" id="app-style" rel="stylesheet" type="text/css" />
<style>
        .file-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
            padding: 10px 40px;
            margin: 5px;
            color: #ffffff;
            background-color: #007BFF;
            border: none;
            border-radius: 0; /* Remove border radius */
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.5s ease;
        }
        .file-container:hover {
            background-color: #0056b3;
        }
        .file-container_lic {
            position: relative;
            display: inline-block;
            cursor: pointer;
            padding: 10px 40px;
            margin: 5px;
            color: #ffffff;
            background-color: #007BFF;
            border: none;
            border-radius: 0; /* Remove border radius */
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.5s ease;
        }
        .file-container_lic:hover {
            background-color: #0056b3;
        }
        .file-container_pass {
            position: relative;
            display: inline-block;
            cursor: pointer;
            padding: 10px 40px;
            margin: 5px;
            color: #ffffff;
            background-color: #007BFF;
            border: none;
            border-radius: 0; /* Remove border radius */
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.5s ease;
        }
        .file-container_pass:hover {
            background-color: #0056b3;
        }
        .noFile {
            display: none;
        }

        .loader_carga {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
</style>