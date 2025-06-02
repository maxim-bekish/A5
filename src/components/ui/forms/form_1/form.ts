interface data {
	type?: string;
	id: string;
	variable: {
		name?: boolean;
		mail?: boolean;
		phone?: boolean;
		company?: boolean;
	};
	checkbox_required: boolean;
	button?: {
		label?: string;
		class?: string;
    
	};
	actions: string;
}
