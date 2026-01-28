<?php include 'include/header.php'; ?>
        <title>Tattoo Request - Tattoosaurus</title>
        <style>
            footer {
                display: none;
            }
        </style>
    </head>
    <body data-barba="wrapper">
        <main data-barba="container" data-barba-namespace="tattoo-request">
            <div class="tattoo-booking-container">
                <!-- Header -->
                <div class="booking-header">
                    <button class="back-btn" id="backBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="finish-later-btn">Finish later</button>
                </div>

                <!-- Progress Bar -->
                <div class="booking-progress-bar">
                    <div class="progress-steps" id="progressSteps">
                        <div class="progress-step active"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                        <div class="progress-step"></div>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="booking-content" id="bookingContent">
                    <!-- Step 1: Upload Reference Images -->
                    <div class="step-content" data-step="1">
                        <div class="artist-profile">
                            <div class="artist-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                                <!-- Artist image placeholder -->
                            </div>
                            <div class="artist-name">EJ Tattz</div>
                            <div class="artist-location">Geo City</div>
                        </div>

                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Hi Daniel Houston! Thanks for your interest in booking with me. Please answer these quick questions to share your brief.</div>
                        </div>

                        <div class="question-bubble" style="margin-top: 20px;">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Upload a few reference images that are similar to the tattoo you want.</div>
                        </div>

                        <div class="booking-form">
                            <button class="upload-btn" onclick="document.getElementById('imageUpload').click()">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 8L12 3L7 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 3V15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Upload
                            </button>
                            <input type="file" id="imageUpload" multiple accept="image/*" style="display: none;">
                            <div id="imagePreviewContainer"></div>
                        </div>
                    </div>

                    <!-- Step 2: Describe Tattoo -->
                    <div class="step-content d-none" data-step="2">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Describe your tattoo idea 🖤</div>
                        </div>

                        <div class="booking-form">
                            <textarea class="form-control-custom" rows="6" placeholder='Ex. I want a tattoo on my shoulder of a heart with a ribbon around it that says "Mom".'></textarea>
                        </div>
                    </div>

                    <!-- Step 3: Tattoo Size -->
                    <div class="step-content d-none" data-step="3">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">How big would you like your tattoo to be?</div>
                        </div>

                        <div class="option-list">
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="size" id="size1" value="credit-card">
                                <label for="size1">Size of a credit card 💳</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="size" id="size2" value="palm">
                                <label for="size2">Palm-sized 🤚</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="size" id="size3" value="hand">
                                <label for="size3">Hand-sized 🖐️</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="size" id="size4" value="half-sleeve">
                                <label for="size4">Half sleeve or larger 💪</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="size" id="size5" value="undecided">
                                <label for="size5">Haven't decided yet 🤔</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Body Location -->
                    <div class="step-content d-none" data-step="4">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Where would you like your tattoo?</div>
                        </div>

                        <div class="body-selector-container">
                            <div class="body-view-toggle">
                                <button class="body-view-btn active">Front</button>
                                <button class="body-view-btn">Back</button>
                            </div>
                            
                            <div class="body-figure">
                                <!-- Body parts will be clickable areas -->
                            </div>
                        </div>
                    </div>

                    <!-- Step 5: Best Days -->
                    <div class="step-content d-none" data-step="5">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">What days are best for you?</div>
                        </div>

                        <div class="option-list">
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="monday" value="monday">
                                <label for="monday">Mondays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="tuesday" value="tuesday">
                                <label for="tuesday">Tuesdays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="wednesday" value="wednesday">
                                <label for="wednesday">Wednesdays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="thursday" value="thursday">
                                <label for="thursday">Thursdays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="friday" value="friday">
                                <label for="friday">Fridays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="saturday" value="saturday">
                                <label for="saturday">Saturdays</label>
                            </div>
                            <div class="option-item" onclick="selectCheckbox(this)">
                                <input type="checkbox" name="days" id="sunday" value="sunday">
                                <label for="sunday">Sundays</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 6: Time Preference -->
                    <div class="step-content d-none" data-step="6">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Do you have a time preference?</div>
                        </div>

                        <div class="option-list">
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="time" id="morning" value="morning">
                                <label for="morning">Mornings (9am - 12pm)</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="time" id="afternoon" value="afternoon">
                                <label for="afternoon">Afternoons (1pm - 5pm)</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="time" id="evening" value="evening">
                                <label for="evening">Evenings (6pm - 10pm)</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 7: Budget -->
                    <div class="step-content d-none" data-step="7">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">What's your budget?</div>
                        </div>

                        <div class="option-list">
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="budget" id="budget1" value="50-150">
                                <label for="budget1">$50 to $150</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="budget" id="budget2" value="150-250">
                                <label for="budget2">$150 to $250</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="budget" id="budget3" value="250-500">
                                <label for="budget3">$250 to $500</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="budget" id="budget4" value="500+">
                                <label for="budget4">Above $500</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 8: Age Confirmation -->
                    <div class="step-content d-none" data-step="8">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">Please confirm your age</div>
                        </div>

                        <div class="option-list">
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="age" id="age18" value="18+">
                                <label for="age18">I am 18 or older</label>
                            </div>
                            <div class="option-item" onclick="selectOption(this)">
                                <input type="radio" name="age" id="ageUnder18" value="under18">
                                <label for="ageUnder18">I am younger than 18</label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 9: Pronouns -->
                    <div class="step-content d-none" data-step="9">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">What are your pronouns?</div>
                        </div>

                        <div class="booking-form">
                            <input type="text" class="form-control-custom" placeholder="Your answer">
                        </div>
                    </div>

                    <!-- Step 10: When to get tattoo -->
                    <div class="step-content d-none" data-step="10">
                        <div class="question-bubble">
                            <div class="question-avatar">
                                <img src="img/artist-detail-img.png" alt="">
                            </div>
                            <div class="question-text">When are you looking to get this tattoo done?</div>
                        </div>

                        <div class="booking-form">
                            <textarea class="form-control-custom" rows="4" placeholder="(This week, this month, or next month)"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Next Button -->
                <div class="next-btn-container">
                    <button class="next-btn" id="nextBtn">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </button>
                    <div class="step-counter" id="stepCounter">1 of 10</div>
                </div>
            </div>
        <?php include 'include/footer.php'; ?>

        <script>
            // Booking Steps Manager
            class TattooBooking {
                constructor() {
                    this.currentStep = 1;
                    this.totalSteps = 10;
                    this.init();
                }

                init() {
                    // Event listeners
                    document.getElementById('nextBtn').addEventListener('click', () => this.nextStep());
                    document.getElementById('backBtn').addEventListener('click', () => this.prevStep());
                    
                    // Image upload handler
                    document.getElementById('imageUpload').addEventListener('change', (e) => this.handleImageUpload(e));
                    
                    this.updateUI();
                }

                nextStep() {
                    if (this.currentStep < this.totalSteps) {
                        this.currentStep++;
                        this.updateUI();
                    } else {
                        // Submit form
                        this.submitForm();
                    }
                }

                prevStep() {
                    if (this.currentStep > 1) {
                        this.currentStep--;
                        this.updateUI();
                    }
                }

                updateUI() {
                    // Update progress bars
                    const progressSteps = document.querySelectorAll('.progress-step');
                    progressSteps.forEach((step, index) => {
                        if (index < this.currentStep) {
                            step.classList.add('active');
                        } else {
                            step.classList.remove('active');
                        }
                    });

                    // Update content
                    const allSteps = document.querySelectorAll('.step-content');
                    allSteps.forEach((step, index) => {
                        if (index + 1 === this.currentStep) {
                            step.classList.remove('d-none');
                        } else {
                            step.classList.add('d-none');
                        }
                    });

                    // Update step counter
                    document.getElementById('stepCounter').textContent = `${this.currentStep} of ${this.totalSteps}`;

                    // Update button state
                    const nextBtn = document.getElementById('nextBtn');
                    if (this.currentStep === this.totalSteps) {
                        nextBtn.innerHTML = '<span>Submit</span>';
                        nextBtn.classList.add('active');
                    } else {
                        nextBtn.innerHTML = '<span><i class="fa-solid fa-arrow-right-long"></i></span>';
                    }

                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }

                handleImageUpload(e) {
                    const files = e.target.files;
                    const container = document.getElementById('imagePreviewContainer');
                    container.innerHTML = '';

                    Array.from(files).forEach((file, index) => {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            const preview = document.createElement('div');
                            preview.className = 'image-preview';
                            preview.innerHTML = `
                                <img src="${event.target.result}" class="preview-img" alt="Preview ${index + 1}">
                                <button class="remove-img" onclick="this.parentElement.remove()"><i class="fa-solid fa-xmark"></i></button>
                            `;
                            container.appendChild(preview);
                        };
                        reader.readAsDataURL(file);
                    });
                }

                submitForm() {
                    alert('Form submitted! This is where you would send the data to your server.');
                }
            }

            // Helper function for radio button selection
            function selectOption(element) {
                const radio = element.querySelector('input[type="radio"]');
                radio.checked = true;
                
                // Remove selected class from siblings
                const siblings = element.parentElement.querySelectorAll('.option-item');
                siblings.forEach(sib => sib.classList.remove('selected'));
                
                // Add selected class
                element.classList.add('selected');
            }

            // Helper function for checkbox selection
            function selectCheckbox(element) {
                const checkbox = element.querySelector('input[type="checkbox"]');
                checkbox.checked = !checkbox.checked;
                
                if (checkbox.checked) {
                    element.classList.add('selected');
                } else {
                    element.classList.remove('selected');
                }
            }

            // Initialize
            document.addEventListener('DOMContentLoaded', () => {
                new TattooBooking();
            });
        </script>