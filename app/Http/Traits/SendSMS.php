<?php
/**
 * Created by PhpStorm.
 * User: tospay
 * Date: 4/30/18
 * Time: 8:05 PM
 */

namespace App\Http\Traits;


use App\Http\Library\AfricasTalking;
use App\Http\Library\AfricasTalking\AfricasTalkingGateway;
use PhpParser\Builder\Trait_;
Use App\Http\Library\AfricasTalking\AfricasTalkingGatewayException;

trait SendSMS
{
    public function sendSmsMethod($phone)
    {
// Be sure to include the file you've just downloaded

// Specify your authentication credentials
        $username = "ElimuFront";
        $apikey = "259de6fe3ec3a4c56cb1ef47ea49e5b5f6d115ef281d30c1237088cbd976e250";
// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
        $recipients = $phone;
// And of course we want our recipients to know what we really do
        $message = "Please confirm your phone number";
// Create a new instance of our awesome gateway class
        $gateway = new AfricasTalkingGateway($username, $apikey);
        /*************************************************************************************
         * NOTE: If connecting to the sandbox:
         * 1. Use "sandbox" as the username
         * 2. Use the apiKey generated from your sandbox application
         * https://account.africastalking.com/apps/sandbox/settings/key
         * 3. Add the "sandbox" flag to the constructor
         * $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
         **************************************************************************************/
// Any gateway error will be captured by our custom Exception class below,
// so wrap the call in a try-catch block
        try {
            // Thats it, hit send and we'll take care of the rest.
            $results = $gateway->sendMessage($recipients, $message);

            foreach ($results as $result) {
                // status is either "Success" or "error message"
                echo " Number: " . $result->number;
                echo " Status: " . $result->status;
                echo " MessageId: " . $result->messageId;
                echo " Cost: " . $result->cost . "\n";
            }
        } catch (AfricasTalking\AfricasTalkingGatewayException $e) {
            echo "Encountered an error while sending: " . $e->getMessage();
        }


    }
}