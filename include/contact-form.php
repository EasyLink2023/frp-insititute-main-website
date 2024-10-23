<div class="form-volunteer">
    <h2>Drop a query</h2>
    <form id="contactForm" action="#" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <input type="text" class="form-control py-2" id="name" placeholder="Enter your full name" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="email" class="form-control py-2" id="email" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="tel" class="form-control py-2" id="phone" placeholder="Enter your phone" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control py-2" id="address" placeholder="Enter your address" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control py-2" id="company" placeholder="Enter your company" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea name="v_message" id="message" cols="30" rows="3" class="form-control py-2" placeholder="Write your enquiry" required></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="loader" id="loader"></div>
                    <input type="submit" class="btn btn-white px-5 py-2" value="Send">
                </div>
            </div>
        </div>
    </form>
</div>