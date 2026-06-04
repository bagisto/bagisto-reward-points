@component('shop::emails.layout')
    <div style="padding: 30px;">
        <div style="font-size: 20px;color: #242424;line-height: 30px;margin-bottom: 34px;">
            <p style="font-weight: bold;font-size: 20px;color: #242424;line-height: 24px;">
                @lang('rewards::app.mail.dob.dear', ['customer_name' => $data['name']]),
            </p>
            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.dob.greeting') !!}
            </p>
            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.dob.points-rewarded',['points' => $data['points']]) !!}
            </p>

            <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
                {!! __('rewards::app.mail.dob.total-point-left',['total_reward_points' => $data['total_reward_points']]) !!}
            </p>
        </div>

        <p style="font-size: 16px;color: #5E5E5E;line-height: 24px;">
            @lang('rewards::app.mail.dob.thanks')
        </p>
    </div>
@endcomponent