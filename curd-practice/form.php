<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form IN PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-div">
        <div class="conainer">

            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="curd-practice/form.php" methood="POST">
                        <div class="contact-form border border-dark p-3 rounded mt-5" >
                            <h2>Simple Contact Form!</h2>

                           <div class="row">
                                <div class="col-12 col-md-12 mt-5">
                                        <div class="ps-form__group">
                                               <label class="ps-form__label mb-3 text-dark">Name </label>
                                               <input class="form-control bg-white text-dark" type="text"  name="full_name">
                                        </div>
                                </div>

                                <div class="col-12 col-md-12 mt-4">
                                        <div class="ps-form__group">
                                               <label class="ps-form__label mb-3 text-dark">Email </label>
                                               <input class="form-control bg-white text-dark" type="email"  name="email">
                                        </div>
                                </div>

                                <div class="col-12 col-md-12 mt-4">
                                        <div class="ps-form__group">
                                               <label class="ps-form__label mb-3 text-dark">Phone Number </label>
                                               <input class="form-control bg-white text-dark" type="text"  name="phone">
                                        </div>
                                </div>

                                <div class="col-12 col-md-12 mt-4">
                                        <div class="ps-form__group">
                                               <label class="ps-form__label mb-3 text-dark">Enter City </label>
                                               <!-- <input class="form-control bg-white text-dark" type="text" placeholder="Full Name" name="full_name"> -->
                                                <select class="form-control ps-form__input" name="country">
                                                <option value=""></option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="UP">UP</option>
                                            </select>
                                        </div>
                                </div>

                                
                                <div class="col-12 col-md-12 mt-4">
                                        <div class="ps-form__group">
                                               <label class="ps-form__label mb-3 text-dark">Enter Message</label>
                                                <!-- <input class="form-control bg-white text-dark" type="text" placeholder="Enter Message" name="message"> -->
                                                <div class="ps-form__group">
                                                    <textarea class="form-control ps-form__textarea" rows="5"  name="message"></textarea>
                                                </div>
                                        </div>
                                </div>



                            </div>

                            <div class="ps-form__submit d-flex justify-content-center">
                                    <button class="ps-btn  bg-primary text-white">Submit</button>
                             </div>

                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>