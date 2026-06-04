@component('shop::emails.layout')
    <div style="padding: 30px;">
        <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
            <p style="font-weight: bold;font-size: 20px;color: #242424;line-height: 24px;">
                @lang('rewards::app.mail.fraud.dear', ['customer_name' => $data['name']]),
            </p>
            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.fraud.greeting',['date' => $data['date']]) !!}
            </p>
            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.fraud.points-rewarded',['points' => $data['points'] ,'order_id' => $data['order_id']]) !!}
            </p>

            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                #Note. {!! __($data['note']) !!}
            </p>
            
            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.fraud.status') !!}
            </p>

            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.fraud.total-point-left',['total_reward_points' => $data['total_reward_points']]) !!}
            </p>
        </div>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            @lang('rewards::app.mail.registration.thanks')
        </p>
    </div>
@endcomponent