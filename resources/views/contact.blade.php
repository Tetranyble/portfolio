<div class="contact-form">
                        <form id="ajax-contact" action="{{route('enquire')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required="required" data-error="name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="required" data-error="valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone*" required="required" data-error="phone is required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject*" required="required" data-error="subject is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="10" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <button type="submit">Submit</button>
                            <div class="messages alert-success"></div>
                        </form>
                    </div>
