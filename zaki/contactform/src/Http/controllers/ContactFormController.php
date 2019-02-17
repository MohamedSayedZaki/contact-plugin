<?php
    // zaki\contactform\src\Http\Controllers\ContactFormController.php
    namespace zaki\Contactform\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use zaki\Contactform\Models\ContactForm;

    class ContactFormController extends Controller {

        public function index()
        {
           return view('contactform::index');
        }

        public function sendMail(Request $request)
        {
            ContactForm::create($request->all());

			return redirect(route('contactForm'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
        }


    }
?>