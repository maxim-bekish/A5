interface data {
	id: string;
	class?: string;
	title?: string;
	subtitle?: string;
	variable: {
		name?: boolean;
		phone?: boolean;
		mail?: boolean;
		company?: boolean;
	};
	checkbox: {
		required: boolean;
		class?: string;
	};
	button: {
		label: string;
		class: string;
	};
	actions?: string;
}
